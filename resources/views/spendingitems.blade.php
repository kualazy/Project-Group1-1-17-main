@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">ข้อมูลรายรับ - รายจ่าย</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead class="text-center">
                                    <tr>
                                        <th>วันที่</th>
                                        <th>รายรับ</th>
                                        <th>รายจ่าย</th>
                                        <th>คงเหลือ</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($statement as $row)
                                        <tr>
                                            <td>{{ $row->date }} </td>
                                            <td>{{ $row->money ?? 0 }} ฿
                                            </td>
                                            <td>{{ $row->money2 ?? 0 }} ฿
                                            </td>
                                            <td>{{ $row->total }} ฿
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
