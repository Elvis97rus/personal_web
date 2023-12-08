@if($recipient == 'artemsh.job@gmail.com')
    <h2>Message from Contact form - ArtemSH website</h2>
@else
    <h2>You have sent a message from ArtemSH personal website. We have received it and will reply shortly.</h2>
@endif
<table>
    <tr>
        <th>Name</th>
        <td>{{$name}}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{$email}}</td>
    </tr>
</table>
<div>
    {{$body}}
</div>
