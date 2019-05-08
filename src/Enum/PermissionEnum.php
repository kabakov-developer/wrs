<?php
namespace App\Enum;

class PermissionEnum
{
    public const CAN_CREATE_TEAM = 'can_create_team';
    
    public const CAN_ADD_MEMBER_TO_TEAM = 'can_add_member_to_team';

    public const CAN_DELETE_MEMBER_FROM_TEAM = 'can_delete_member_from_team';
    
    public const CAN_CREATE_PROJECT = 'can_create_project';

    public const CAN_CREATE_SOFT_SKILL = 'can_create_soft_skill';
    
    public const CAN_DELETE_SOFT_SKILL = 'can_delete_soft_skill';
    
    public const CAN_CREATE_TECHNICAL_SKILL = 'can_create_technical_skill';
    
    public const CAN_DELETE_TECHNICAL_SKILL = 'can_delete_technical_skill';
    
    public const CAN_UPDATE_SOFT_SKILL = 'can_update_soft_skill';

    public const CAN_UPDATE_TECHNICAL_SKILL = 'can_update_technical_skill';
    
    public const CAN_UPDATE_ROLE = 'can_update_role';
    
    public const CAN_SEE_MANAGE_TASK = 'can_see_manage_task';
    
    public const CAN_CREATE_TASK = 'can_create_task';
    
    public const CAN_SEE_MANAGE_TEAM = 'can_see_manage_team';

    public const CAN_SEE_MANAGE_PROJECT = 'can_see_manage_project';
    
    public const CAN_SEE_TASKS_ASSIGNED_TO_ME = 'can_see_tasks_assigned_to_me';
}

