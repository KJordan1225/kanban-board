<?php

namespace App\Models;

use App\Traits\Sortable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory, Sortable;

    protected $fillable = [
        'sort',
        'description',
    ];

    public function getSortableQuery()
    {
        return $this->group->tasks();
    }

    public function scopeForProject(Builder $query, $projectId)
    {
        $query->where('project_id', $projectId);
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
