
  <!-- Modal -->
  <div class="modal fade" id="edit{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('store.update',$category->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
         <div class="modal-body">       
         <div class="mb-3">
            <label for="" class="form-label">Category Name</label>
            <input
                type="text"
                class="form-control"
                name="title"
                id=""
                aria-describedby="helpId"
                placeholder="Please insert a name"
                value={{$category->category_name}}            />  
             </div>  
         
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>       
          </div>
        </form>
      </div>
    </div>
  </div>


  {{-- Delete --}}


  <!-- Modal -->
  <div class="modal fade" id="delete{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('category.destroy',$category->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('DELETE')
         <div class="modal-body">
        Are you sure to delete <strong>{{$category->category_name}} </strong> Category?
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Accept</button>       
          </div>
        </form>
      </div>
    </div>
  </div>