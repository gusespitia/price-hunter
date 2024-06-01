
  <!-- Modal -->
  <div class="modal fade" id="edit{{$store->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit store</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('store.update',$store->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
         <div class="modal-body">
        
         <div class="mb-3">
            <label for="" class="form-label">Store Name</label>
            <input
            type="text"
            class="form-control"
            name="store_name"
            id=""
            aria-describedby="helpId"
            placeholder="Please insert a name" 
                value={{$store->store_name}}
            />  
             </div>  

             <div class="mb-3">
              <label for="" class="form-label">Store URL Base</label>
              <input
                  type="text"
                  class="form-control"
                  name="store_url"
                  id=""
                  aria-describedby="helpId"
                  placeholder="Please insert a url of your Picture"
                  value={{$store->store_url}}
              /> 

             <div class="mb-3">
              <label for="" class="form-label">Store logo</label>
              <input
              type="text"
              class="form-control"
              name="store_logo"
              id=""
              aria-describedby="helpId"
              placeholder="Please insert a url for the logo"
                  value={{$store->store_logo}}
              />  
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
  <div class="modal fade" id="delete{{$store->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete store</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{ route('store.destroy',$store->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('DELETE')
         <div class="modal-body">
        Are you sure to delete <strong>{{$store->store_name}} </strong> store?
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Accept</button>       
          </div>
        </form>
      </div>
    </div>
  </div>ñ