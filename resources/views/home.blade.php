@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-5 col-md-4">
                                <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                    <i class="material-icons opacity-10">account_balance_wallet</i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category h4">Cash</p>
                                    <p class="card-title h5"> {{ $account }} ฿
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">รายการล่าสุด</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3 pb-0">
                        <ul class="list-group">
                            @foreach ($statement as $row)
                                @if (!empty($row->money))
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark font-weight-bold text-sm">รายรับ</h6>

                                        </div>
                                        <div class="d-flex align-items-center text-sm">
                                            {{ $row->money }} ฿
                                        </div>
                                    </li>
                                @endif
                                @if (!empty($row->money2))
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark font-weight-bold text-sm">รายจ่าย</h6>
                                        </div>
                                        <div class="d-flex align-items-center text-sm">
                                            {{ $row->money2 }} ฿
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
