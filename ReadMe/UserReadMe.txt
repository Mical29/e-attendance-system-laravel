-----------------------------------------------------------------------------------------------------

/admin/create_user.blade.php <-- We are Here (Bob)
        *** Display Form *** 
    <form action = {{ route('users.store') }} method= POST enctype="multipart/form-data"> </form>

    


------------------------------------------------------------------------------------------------------

/admin/user_index.blade.php 

    *** Display all users with their role *** 

    @foreach($data as $key => $user)
        {{ $user->name }}
        {{ $user->email }}
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $role)
                {{$role}}
                @endforeach
            @endif
    @endforeach


Edit Button 
    - {{ route('users.edit',$user->id) }}

Delete Button 
    -  {{route(users.destroy), $user->id}}


----------------------------------------------------------------------------------------------------