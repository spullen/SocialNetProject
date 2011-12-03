{include file="header.tpl" title="Admin Home"}
<div class="statistics">
    <div class="userStats">
        <h2>User Statistics</h2>
        <table>
            <tr>
                <td class="align_right">Number of Users <img src="../images/icons/user_red.png" border="0" />:</td>
                <td>{$userCount}</td>
            </tr>
            <tr>
                <td class="align_right">Number of Friendships <img src="../images/icons/group_link.png" border="0" />:</td>
                <td>{$numOfFriends}</td>
            </tr>
            <tr>
                <td class="align_right">Number of male users <img src="../images/icons/male.png" border="0" />:</td>
                <td>{$maleUserCount}</td>
            </tr>
            <tr>
                <td class="align_right">Number of female users <img src="../images/icons/female.png" border="0" />:</td>
                <td>{$femaleUserCount}</td>
            </tr>
        </table>
    </div>
    <div class="userStatsGraph">
        <img src="http://chart.apis.google.com/chart?chs=800x375&chd=t:{$maleRatio},{$femaleRatio}&cht=p3&chl=Male|Female&chco=0000FF" alt="Ratio of Male to Female Users" />
    </div>
    <div class="popularUsers">
        <h2>Top 10 Popular Users</h2>
        <table>
            <tr>
                <th>Email</th>
                <th>Number of Friends</th>
            </tr>
            {foreach from=$popularUsers key=index item=popularUser}
                <tr class="{cycle values="odd,even"}">
                    <td>{$popularUser.email }</td>
                    <td>{$popularUser.FriendCount }</td>
                </tr>
            {/foreach}
        </table>
    </div>
    <div class="administrativeLog">
        <h2>Administrative Log</h2>
        <table>
            <tr>
                <th>User</th>
                <th>Remote Addr</th>
                <th>Request URI</th>
                <th>Query String</th>
                <th>Request Method</th>
                <th>Referer</th>
                <th>Created At</th>
            </tr>
            {foreach from=$adminLogs item=adminLog}
            <tr class="{cycle values="odd,even"}">
                <td>{$adminLog->userID}</td>
                <td>{$adminLog->remoteAddr}</td>
                <td>{$adminLog->requestURI}</td>
                <td>{$adminLog->queryString}</td>
                <td>{$adminLog->requestMethod}</td>
                <td>{$adminLog->referer}</td>
                <td>{$adminLog->createdAt}</td>
            </tr>
            {/foreach}
        </table>
    </div>
</div>
{include file="footer.tpl"}