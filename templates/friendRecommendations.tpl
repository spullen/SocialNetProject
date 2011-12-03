<h2>Friend Recommendation</h2>
{if count($recommendations) > 0}
<table class="friendRecommendationList">
    <tr>
        <th>Name</th>
        <th>Number of Mutual Friends</th>
    </tr>
    {foreach from=$recommendations item=recommendation}
        <tr>
            <td><a href="profile.php?uid={$recommendation.id}"><img src="images/icons/user.png" border="0" /> {$recommendation.name}</a></td>
            <td>{$recommendation.FriendedCount}</td>
        </tr>
    {/foreach}
</table>
{else}
    No friend recommendations at this time
{/if}