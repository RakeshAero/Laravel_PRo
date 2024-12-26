<div class="d-flex justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-4">
        <div class="mb-4 pb-2 fw-normal">
            <h3>Create new post</h3>
        </div>
        @include('common.errors')
<form method="POST" action="{{url('storepost')}}">
    @csrf
    <label for="title" class="form-label fw-bold">Title : </label>
    <input class="form-control" name="title">
    <label for="posts" class="form-label fw-bold">Content</label>
    <textarea class="form-control" name="posts"></textarea>
    <label for="category" class="form-label fw-bold">Category</label>
    <select class="form-select" name="category">
        <option selected>select category</option>
        <option>General</option>
        <option>programing</option>
        <option>networking</option>
    </select>
    <button class="btn btn-primary mt-3">post</button>
</form>
    </div>
</div>
