{ pkgs ? import <nixpkgs> {} }:

let
  rmapi = pkgs.buildGoModule rec {
    pname = "rmapi";
    version = "unstable-${builtins.substring 0 8 src.rev}";

    src = pkgs.fetchFromGitHub {
      owner = "scrybbling-together";
      repo = "rmapi";
      rev = "23dca7a5431ee88074747a1e2a9617d16e2e7745";
      sha256 = "sha256-MD5UUV6bKMd8cEvp0DMiacwnIyJxlCcS2Rcd++vzgYk=";
    };

    vendorHash = "sha256-Qisfw+lCFZns13jRe9NskCaCKVj5bV1CV8WPpGBhKFc=";

    CGO_ENABLED = 0;

    GOOS = "linux";
    GOARCH = "amd64";

    # Create a static binary
    ldflags = [
      "-w" # Strip DWARF symbol table
      "-extldflags '-static'"
    ];

    postInstall = ''
      # Rename the binary if building for Windows
      ${if (GOOS == "windows") then "mv $out/bin/rmapi $out/bin/rmapi.exe" else ""}

      # Create a directory with just the binary for easy extraction
      mkdir -p $out/portable
      cp $out/bin/rmapi* $out/portable/
    '';
  };
in
pkgs.stdenv.mkDerivation {
  name = "rmapi-portable";

  buildInputs = [];

  # Just copy the portable binary to the output
  buildCommand = ''
    mkdir -p $out/bin
    cp -r ${rmapi}/portable/* $out/bin/
    chmod +x $out/bin/rmapi*
  '';
}
