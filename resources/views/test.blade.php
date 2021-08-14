<form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" id="name" >
    <input type="text" name="amount" id="amount">
    <input type="file" name="image" id="image">
    <button>Submit</button>
</form>