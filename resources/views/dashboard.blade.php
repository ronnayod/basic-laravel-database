<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            สวัสดีผู้ใช้งาน
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container ">
            <div class="row">
                <div class="table">
                    <table class="table table-bordered ">
                        <thead>
                          <tr class="table-primary">
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">อีเมล</th>
                            <th scope="col">วันที่เข้าสู่ระบบ</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach($users as $row)
                            <tr class="table-info">
                                <th >{{$i++}}</th>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
