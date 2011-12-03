<div>
    <div>
        <h4>Interests:</h4>
        {$profile->personalInfo->interests|nl2br}
    </div>
    <div>
        <h4>Music:</h4>
        {$profile->personalInfo->music|nl2br}
    </div>
    <div>
        <h4>Television Shows:</h4>
        {$profile->personalInfo->shows|nl2br}
    </div>
    <div>
        <h4>Movies:</h4>
        {$profile->personalInfo->movies|nl2br}
    </div>
    <div>
        <h4>Books:</h4>
        {$profile->personalInfo->books|nl2br}
    </div>
</div>
<div class="actions">
{if $user->id == $profile->id}
    <a href="javascript: void(0);" onclick="showPersonalInfoEdit({$profile->id});"><img src="images/icons/pencil.png" border="0" /> Edit Personal Information</a>
{/if}
</div>