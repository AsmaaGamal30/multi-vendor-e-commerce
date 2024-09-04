<p>Dear {{ $admin->name }}</p>
<br>
<p>
    Your password on Laravecom system was changed successfully.
    Here is your new login credentials:
    <br>
    <b>Login ID: </b> {{ $admin->username }} or {{ $admin->email }}
    <br>
<p>Password: </p> {{ $new_password }}
</p>
<br>
please, keep your credentials confidential.
<br>
----------------------------------------------------
<p>This email was automaticaly sent by Laravecom system. Do not replay to it.</p>
