<div>
    <h1>Add details for sending Email</h1>
    <form action="send-email" method="POST" >
        @csrf
        <input type="text" name="to" placeholder="Enter Email Address" id="">
        <br><br>
        <input type="text" name="subject" placeholder="Enter email Subject" id="">
        <br><br>
        <textarea name="message" id="" type="text" cols="30" rows="10"></textarea>
        <button  type="submit">Submit</button>
    </form>
</div>
