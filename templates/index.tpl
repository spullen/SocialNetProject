{include file="header.tpl" title="Home"}
{if $user != null}
<div class="landingLeft">
    <div>
        <h1>Hello, {$user->name}</h1>
        <a href="recommendations.php" rel="height=450" class="lbOn" onclick="return false;"><img src="images/icons/group_go.png" border="0" /> Friend Recommendations</a>
    </div>
    <div id="whatsGoingOn" class="friendStatuses">
        <h2>Friend Statuses</h2>
        {include file="friendStatusList.tpl"}
    </div>
    <div class="clear"></div>
</div>
{else}
    <div>
        <h2>Welcome</h2>
        <div>
            Welcome to CyberStalker. <br />
            If you already have an account <a href="accounts/login.php">login</a><br />
            or you can create a new account by going <a href="accounts/register.php">here</a>
        </div>
    </div>
{/if}
{include file="footer.tpl" }