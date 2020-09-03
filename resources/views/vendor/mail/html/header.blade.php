<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://teamconsultancy.co.uk/wp-content/uploads/2019/09/logo-new-.png" class="logo" alt="Team Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
