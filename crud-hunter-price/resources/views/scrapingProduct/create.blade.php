
  <!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">add new Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('category.store')}} " method="post" enctype="multipart/form-data">
          @csrf
         <div class="modal-body">
        
         <div class="mb-3">
            <label for="" class="form-label">Category Name</label>
            <input
                type="text"
                class="form-control"
                name="category_name"
                id=""
                aria-describedby="helpId"
                placeholder="Please insert a name"  />  
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