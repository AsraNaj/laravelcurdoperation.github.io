<div>
    <h2>Add new user</h2>
    <form action="adduser" method="post">
        @csrf
         <div class="input-wrapper">
            <input type="text" placeholder="Enter your name" name="username" value="{{old('username')}}"
            class="{{$errors->first('username')?'input-error':''}}">
            <span style="color: red">@error('username'){{$message}}@enderror</span>
         </div>
         <div class="input-wrapper">
            <input type="text" placeholder="Enter your email" name="email" value="{{old('email')}}"
            class="{{$errors->first('email')?'input-error':''}}">
            <span style="color: red">@error('email'){{$message}}@enderror</span>
         </div>
         <div class="input-wrapper">
               <input type="text" placeholder="Enter your city" name="city" value="{{old('city')}}"
               class="{{$errors->first('city')?'input-error':''}}">
            <span style="color: red">@error('city'){{$message}}@enderror</span>
         </div>
         <div class="input-wrapper">
        <button  >Add New User</button>
        </div>
    </form>
</div>
<style>
input{
    border: orange 1px solid;
    height: 35px;
    width:200px;
    border-radius:2px ;
    color: orange;

}
input [type='checkbox']{
    height: 20px;
    width: 40px;

}
.input-wrapper{
    margin: 10px;
}
button{
    border: orange 1px solid;
    height: 35px;
    width: 200px;
    border-radius: 2px;
    color: orange;
    background-color: #fff;
    cursor: pointer;
}
.input-error{
    border: 1px solid red;
    color: red;
}
</style>
        
        