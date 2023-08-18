<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
class Task extends Model
{
    use HasFactory;
    /**
     * Get the workspace that owns the task
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workspace(): BelongsTo
    {
        return $this->belongsTo(Workspace::class, 'workspace_id', 'id');
    }

    /**
     * Get the user that owns the Task
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    protected $casts = [
        'completed_at' => 'datetime',
        'start' => 'datetime',
        'end' => 'datetime'
    ];

    public function scopeCompleteTask($query){
        return $query->where('status','completed');
    }


    public function scopeIncompleteTask($query){
        return $query->where('status','incomplete');
    }
}
