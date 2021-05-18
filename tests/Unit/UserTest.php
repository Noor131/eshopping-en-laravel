<?php

namespace Tests\Unit;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Session;
use App\User;
use Auth;


class UserTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testRegister(){
        $data=['name'=>'faisal','email'=>'faisal@gmail.com','password'=>'12345' ,'password_confirmation'=>'12345'];
        $response=$this->json('POST', '/register',$data);
        // dd($response->getContent());

        $this->assertDatabaseHas('users', [
            'email'=>'faisal@gmail.com'
        ]);
    }

    public function testLogin(){
        $data=['email'=>'zalo@gmail.com','password'=>'12345' ];
        $response=$this->json('POST', '/login',$data);
        $this->assertEquals($data['email'],'zalo@gmail.com');
    }
}
