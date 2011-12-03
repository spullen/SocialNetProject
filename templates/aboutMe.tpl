<table>
    <tr>
      <td class="align_right bold">Name:</td>
      <td>{$profile->name}</td>
    </tr>
    <tr>
      <td class="align_right bold">Email:</td>
      <td>{$profile->email}</td>
    </tr>
    <tr>
      <td class="align_right bold">Hometown:</td>
      <td>{$profile->hometown}</td>
    </tr>
    <tr>
        <td class="align_right bold">Current Location:</td>
        <td>{$profile->currentLocation}</td>
    </tr>
    <tr>
      <td class="align_right bold">Gender:</td>
      <td>
        {if $profile->gender == 0}
          Male
        {else}
          Female
        {/if}
      </td>
    </tr>
    <tr>
      <td class="align_right bold">Birthdate:</td>
      <td>{$profile->birthdate|date_format}</td>
    </tr>
</table>
<div class="actions">
{if $user->id == $profile->id}
<a href="javascript: void(0);" onclick="showAboutMeEdit({$profile->id});"><img src="images/icons/pencil.png" border="0" /> Edit Basic Information</a>
{/if}
</div>