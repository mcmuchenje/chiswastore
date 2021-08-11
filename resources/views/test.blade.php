<form method="POST" action="{{ route('test.store') }}">
    @csrf
    <input type="text" name="name" id="name" >
    <input type="text" name="amount" id="amount">
    <input type="text" name="image" id="image">
    <button>Submit</button>
</form>