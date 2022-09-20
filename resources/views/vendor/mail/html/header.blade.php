<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'ADAMANT')
<img src="{{asset('images/adamant-logo.png')}}">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
