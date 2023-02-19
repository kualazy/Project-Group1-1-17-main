@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                        <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                            <i class="material-icons opacity-10">account_balance_wallet</i>
                        </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                        <h6 class="text-center mb-0">ยอดคงเหลือ</h6>
                        <hr class="horizontal dark my-3">
                        <h5 class="mb-0">{{ $money ?? 0 }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('admin.calculation.add') }}  ">
            {{ csrf_field() }}
            <div class="col-12">
                <div class="card mt-4">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">เพิ่มข้อมูลรายรับรายจ่าย</h6>
                            </div>
                            <div class="col-6 text-end">
                                <button class="btn bg-gradient-dark mb-0" type="submit"><i
                                        class="material-icons text-sm">add</i>&nbsp;&nbsp;ปุ่มเพิ่มข้อมูล</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p class="mb-0">รายรับ</p>
                                <input type="text" class="form-control card-body border" placeholder="รายรับ"
                                    name='money1'>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-0">รายจ่าย</p>
                                <input type="text" class="form-control card-body border" placeholder="รายจ่าย"
                                    name='money2'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
