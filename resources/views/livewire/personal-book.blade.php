<title>Table</title>
<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <!-- <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </a> -->
            </li>
            <li class="breadcrumb-item"><a href="#">Table</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data table</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Data Table</h1>

        </div>
        <!-- class="btn btn-outline-gray-600 d-inline-flex align-items-center" -->
        <div>
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New
    </button>

<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Personal Info</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name" class="col-form-label" wire:model="name">Name:</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label" wire:model="email">Email:</label>
            <input type="email" class="form-control" id="email">
            <!-- <textarea class="form-control" id="email"></textarea> -->
          </div>
          <div class="form-group">
            <label for="phone" class="col-form-label" wire:model="phone">Phone:</label>
            <input type="number" class="form-control" id="phone">
            <!-- <textarea class="form-control" id="email"></textarea> -->
          </div>
          <!-- <div class="form-group">
            <label for="address" class="col-form-label" wire:model="address">Address:</label>
            <textarea class="form-control" id="address"></textarea>
          </div> -->
        </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" wire:click="$emit('added')" >Save</button>
        </div>
        </div>
    </div>
    </div>
        </div>
    </div>
</div>
<!-- <p>Hello!!</p> -->
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">Name</th>
                        <th class="border-0">Email</th>
                        <th class="border-0">Phone</th>
                        <!-- <th class="border-0">Address</th> -->
                        <!-- <th class="border-0">Gender</th> -->
                        <th class="border-0 rounded-end" style="margin-right:50px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                    @foreach($personal as $personals)
                    <tr>
                        <!-- {{$personals}} -->
                        <td><a href="#" class="text-primary fw-bold">{{$loop-> index + 1}}</a> </td>
                        <td>

                            {{$personals->name}}
                        </td>
                        
                        <td>
                            {{$personals->email}}
                        </td>
                        <td>
                            {{$personals->phone ? $personals->phone : "01515227119"}}
                        </td>
                        <!-- <td>
                            {{$personals->address ?? 'Dhaka'}}
                        </td> -->
                        <!-- <td>
                           {{$personals->gender ?? 'Male'}}
                        </td> -->
                        <td>

                            <div class="d-flex align-items-center">
                                <!-- <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>                                    -->
                                <button type="button" class="btn btn-primary sm" style="margin-right:5px; text-align:center" wire:click="$emit('deleted',{{$personals->id}})">Edit</button> <br>
                                <button type="button" wire:click="$emit('deleted',{{ $personals->id }})" class="btn btn-secondary sm">Delete</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    <!--  -->

                </tbody>
            </table>
        </div>
    </div>

</div>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav>