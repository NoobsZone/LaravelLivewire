<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use App\Models\User as UserModel;
use App\Models\PersonalBook as PersonalBookModel;


class PersonalBook extends Component
{
    public $show = false;
    protected $listeners = [
        'deleted' => 'delete',
        'added' => 'store',
        'showModal'=> 'show'
    
    
    ];
    // protected $listeners = ['added' => 'store'];
    // protected $listeners = ['showButton'];
    // public $name, $email, $user_id;
    // public $updateMode = false;
    public function render()
    {

        // $users = UserModel::all();
        // echo $users;    

        // $data = [
        //       'users' => $users
        // ];
        return view('livewire.personal-book',[
            'personal' => PersonalBookModel::all()
        ]);
    }
    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->address = '';
        $this->gender = '';
    }
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|phone',
        ]);
        PersonalBookModel::create([
            'name' => $this->name,
            'email' => $this->email,
            // 'phone' => $this->phone,
            // 'gender'=> $this->gender,
            'address'=> $this->address,
        ]);

        session()->flash('message', 'Personal Book Created Successfully.');

        // $this->resetInputFields();

        // $this->emit('userStore'); // Close model to using to jquery
    }
    public function edit ($id){
        // echo 'Hello I am Edit';
        dd('Hello');
        // $this->emit('edit');
    }
    public function delete($id)
    {
        if ($id) {
            // PersonalBookModel::find($this->deleteId)->delete();
            PersonalBookModel::destroy($id);
            session()->flash('message', 'Personal Book Deleted Successfully.');
        }
    }

    public function show(){
        $this->show = true;    }
}
// <?php

// namespace App\Http\Livewire;

// use Livewire\Component;
// use App\Models\User as UserModel;

// class User extends Component
// {
//     public $name, $email, $user_id;
//     public $updateMode = false;

//     public function render()
//     {
//         $users = UserModel::all();

//         $data = [
//               'users' => $users
//         ];
//         return view('livewire.user',$data);
//     }

//     private function resetInputFields()
//     {
//         $this->name = '';
//         $this->email = '';
//     }

//     public function store()
//     {
//         $this->validate([
//             'name' => 'required',
//             'email' => 'required|email',
//         ]);
//         UserModel::create([
//             'name' => $this->name,
//             'email' => $this->email,
//         ]);

//         session()->flash('message', 'Users Created Successfully.');

//         $this->resetInputFields();

//         $this->emit('userStore'); // Close model to using to jquery
//     }

//     public function edit($id)
//     {
//         $this->updateMode = true;
//         $user = UserModel::find($id);
//         $this->user_id = $id;
//         $this->name = $user->name;
//         $this->email = $user->email;
//     }

//     public function cancel()
//     {
//         $this->updateMode = false;
//         $this->resetInputFields();
//     }

//     public function update()
//     {
//         $this->validate([
//             'name' => 'required',
//             'email' => 'required|email',
//         ]);
//         if ($this->user_id) {
//             $user = UserModel::find($this->user_id);
//             $user->update([
//                 'name' => $this->name,
//                 'email' => $this->email,
//             ]);
//             $this->updateMode = false;
//             session()->flash('message', 'Users Updated Successfully.');
//             $this->resetInputFields();
//         }
//     }

//     public function delete($id)
//     {
//         if ($id) {
//             UserModel::destroy($id);
//             session()->flash('message', 'Users Deleted Successfully.');
//         }
//     }
// }