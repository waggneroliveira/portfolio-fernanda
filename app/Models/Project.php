<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use App\Services\ActivityLogService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use Notifiable, HasFactory, LogsActivity;
    
    protected $fillable = [
        'project_category_id',
        'name_project',
        'title',
        'text',
        'slug',
        'path_image',
        'active',
        'sorting',
    ];

    public function category(){
        return $this->belongsTo(ProjectCategory::class, 'project_category_id');
    }

    public function scopeActive($query){
        return $query->where('active', 1);
    }

    public function scopeSorting($query){
        return $query->orderBy('created_at', 'DESC')->orderby('sorting', 'DESC');
    }

    public function getActivitylogOptions(): LogOptions
    {
        $activityLogService = new ActivityLogService($this);
        
        return LogOptions::defaults()
            ->logOnly($activityLogService->getLoggableAttributes());
    }
}
