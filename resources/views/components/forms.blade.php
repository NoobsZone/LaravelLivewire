<title>Livewire Dashboard - Forms</title>
<form wire:submit.prevent="$emit('added')" >
<div class="py-4">  
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                </a>
            </li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Add Personal Data</h1>
        </div>
        
        <div>
            <button class="btn btn-outline-gray-600 d-inline-flex" wire:click="$set('message', 'Hello')">Submit</button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-lg-4 col-sm-6">
                        <!-- Form -->
                        <div class="mb-3">
                            <label for="firstName">Name</label>
                            <input type="text" class="form-control" id="name" value="" required wire:model="name">

                        </div>
                        
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        
                       
                        <div class="mb-3">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" wire:model="email">
                        </div>
                        
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <!-- Form -->
                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="name" value="" required wire:model="address">

                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
</form>