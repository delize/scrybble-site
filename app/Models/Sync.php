<?php
declare(strict_types=1);

namespace App\Models;

use Eloquent\Pathogen\AbsolutePath;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sync extends Model {
    protected $table = 'sync';

    protected $casts = [
        'completed' => 'bool'
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    /**
     * @param Builder $query
     * @param User $user
     * @return Builder
     */
    public function scopeForUser(Builder $query, User $user): Builder {
        return $query->where('user_id', $user->id);
    }

    public function scopeWhereIsCompleted(Builder $query) {
        return $query->where('completed', true)->whereNotNull('sync_id');
    }

    public function logs(): HasMany {
        return $this->hasMany(SyncLog::class);
    }

    // a file is old if $this->created_at + 10 minutes is less than now
    public function isOld(): bool {
        $minutes = 5;
        return $this->created_at->addMinutes($minutes)->lessThan(now());
    }

    public function hasError(): bool
    {
        return $this->logs()->where('severity', 'error')->count() > 0;
    }

    public function complete(): void
    {
        $this->completed = true;
        $this->save();
    }

    public static function formatForResponse(self $sync): array {
        return [
            'id' => $sync->id,
            'filename' => AbsolutePath::fromString($sync->filename)->name(),
            'path' => $sync->filename,
            'created_at' => $sync->created_at->diffForHumans(),
            'completed' => $sync->completed,
            'error' => (!$sync->completed && $sync->isOld()) || $sync->hasError()
        ];
    }
}
