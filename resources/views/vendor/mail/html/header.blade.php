<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'OSC-Geeks')
<img src="https://oscgeeks.org/img/logo osc@2x.png" class="logo" alt="OSC Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
