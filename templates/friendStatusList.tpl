{if count($statuses) > 0}
{foreach from=$statuses item=status}
    <div class="friend_status">
        <h4><a href="profile.php?uid={$status.userID}">{$status.name}</a> at <i class="statusTime">{$status.createdAt}</i></h4>
        <div class="status_message">
            {$status.message}
        </div>
    </div>
{/foreach}
{else}
    No friends have statuses posted.
{/if}