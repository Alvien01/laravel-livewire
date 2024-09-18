<div class="card">
    <div class="card-body">
    <h5 class="card-body">New Post</h5>
    <div class="card-title">
    <form wire:sumbit ="save">
    <div class="mb-4">
        <label for="title" class="form-label">Title</label>
        <input type="text" wire:model="title" class="form-control" id="title" rows="3"/>
        @error('title')
        <small class="text-danger d-block mt-1">{{$messege}}</sa>
        @enderror
        </div>
    <div class="mb-4">
        <label for="body" class="form-label">Body</label>
        <textarea wire:model="body" class="form-control" id="body" rows="3"></textarea>
        @error('body')
        <small class="text-danger d-block mt-1">{{$messege}}</smal>
        @enderror
        </div>
    <button class="btn btn-primary">Save</button>
    </form>
    </div>
    </div>
</div>
