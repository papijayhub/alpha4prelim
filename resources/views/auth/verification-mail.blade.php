<h1>IPT Security Information</h1>

<p>Welcome {{$user->name}}!</p>
<p>You received this email as a result of registrating an account in our website. Please click on the verification link to verify your account</p>
<a href="{{url('/verification/' . $user->id . '/' . $user->remember_token)}}">Click here!!!</a>