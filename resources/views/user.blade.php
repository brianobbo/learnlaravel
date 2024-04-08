{{--
    
    @include('header')
    <x-Header data="User Component Header"/>
    <h1>Hello: </h1>
--}}


{{--Blade Template--}}
{{--<h1>Hello: {{$name}}</h1>--}}


{{--
    
    @if($username == "Brian")
    <h1>Hello: {{$username}}</h1>

    @elseif($username == "Sam")
    <h1>Hello: {{$username}}</h1>

    @else
    <h1>Uknown User</h1>
    @endif
    
--}}


{{--
    @for($i = 0; $i < 5; $i++)
    <h1>{{$i}}</h1>
    @endfor
--}}


{{--
    @foreach($users as $user)
    <h1>{{$user}}</h1>
    @endforeach
--}}



{{--Include View in View--}}
{{--@include('about')--}}




{{-- Using php in js--}}

{{--
    @csrf
    <script>
        var data = @json($users);
        console.warn(data);
        // console.log(data);
    </script>
--}}



{{--
<h1>User Login</h1>
<form action="userlogin" method="POST">
    @csrf
    <input type="tetx" name="username" placeholder="Username" /><br/>
    <span style="color: red">@error('username'){{$message}} @enderror</span><br/>
    <br/>
    <input type="password" name="password" placeholder="Password" /><br/>
    <span style="color: red">@error('password'){{$message}} @enderror</span><br/>
    <br/>
    <button type="submit">Login</button>
</form>
--}}


{{--Laravel Http client--}}

{{--
    <h1>User List</h1>
    <table  border="1">
        <th>
            <td>Id</td>
            <td>Name</td>
            <td>Emai</td>
            <td>Profile</td>
        </th>
        @foreach($collection as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['first_name']}}</td>
            <td>{{$item['email']}}</td>
            <td>{{$item['avatar']}}</td>
        </tr>
        @endforeach
    </table>
--}}



{{--Request Methods--}}

    <h1>Test request Method</h1>
    <form action="testrequest" method="POST">
        {{method_field('DELETE')}}

        @csrf
        <input type="text" name="username" placeholder="User Name"/><br/><br/>
        <input type="text" name="password" placeholder="User Name"/><br/><br/>
        <button type="submit">Submit Requestj</button>
    </form>
    



{{--Session--}}
{{--
<h1>Session</h1>
<form action="login_session_action" method="POST">
   
    @csrf
    <input type="text" name="username" placeholder="User Name"/><br/><br/>
    <input type="text" name="password" placeholder="User Name"/><br/><br/>
    <button type="submit">Submit Request</button>
</form>
--}}




{{--Flash Session--}}
<h1>Flash Session</h1>
<form action="addmember" method="POST">
   
    @csrf
    <input type="text" name="username" placeholder="User Name"/><br/><br/>
    <input type="text" name="password" placeholder="User Name"/><br/><br/>
    <input type="text" name="email" placeholder="Email"/><br/><br/>
    <button type="submit">Submit Request</button>
    
</form>