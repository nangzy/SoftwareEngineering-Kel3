@extends('main.template1')

@section('header')
    @if(Session::has('loginUser'))
        @include('header.header-after')
    @else
        @include('header.header-before')
    @endauth
@endsection

{{-- bisa buat merch, ticket, TU mole, TU valo --}}

@section('content')
    <form action="/{{ $active }}/{{ $itemId }}/payment-success" method="POST">
        @csrf
        <input type="number" name="user_id" value="{{ Session::get('loginUser')->id }}" style="display: none;">

        <input type="text" name="item_category" value="{{ $active }}" style="display: none;">
        <input type="number" name="item_id" value="{{ $itemId }}" style="display: none;">
        <input type="number" name="game_category_id" value="{{ $itemData->game_category_id }}" style="display: none;">

        @if($active == 'merch')
            <div>
                <input type="text" name="item_name" value="{{ $itemData->merch_name }}" style="display: none;">
                <input type="text" name="size" value="{{ $itemData->chosen_size }}" style="display: none;">
                <input type="number" name="transaction_type" value="2" style="display: none;">
            </div>
        @elseif($active == 'ticket')
            <input type="text" name="event_name" value="{{ $itemData->ticket_name }}" style="display: none;">
            <input type="number" name="transaction_type" value="1" style="display: none;">
        @else
            <input type="number" name="transaction_type" value="3" style="display: none;">
        @endif

        <input type="number" name="quantity" value="{{ $itemData->chosen_quantity }}" style="display: none;">
        <input type="text" name="transaction_date" value="{{ $itemData->transaction_date }}" style="display: none;">
        <input type="text" name="invoice" value="{{ $itemData->invoice }}" style="display: none;">
        <input type="number" name="total_price" value="{{ $itemData->endtotal }}" style="display: none;">
        <input type="text" name="payment_method" value="{{ $itemData->payment_method }}" style="display: none;">
        <input type="text" name="real_price" value="{{ $itemData->price }}" style="display: none;">
        <input type="number" name="product_id" value="{{ $itemId }}" style="display: none;">

        <div class="container-fluid d-flex flex-column justify-content-center col-10 mt-5">
            <div class="container-fluid rounded-4 d-flex flex-column col-8 p-4 warna-abu stroke-putih mt-3 bg-merah-terang-20">
                <div class="justify-content-center d-flex mb-2 fs-4 text-center mt-3 fw-bold text-light">
                    Payment
                </div>

                <div class="mb-2 fs-4 mt-3 fw-semibold">
                    Order Details
                </div>

                <div class="mb-2 fs-5 mt-3 fw-semibold">
                    @if($active == 'merch' || $active == 'ticket')
                        Please confirm the {{ $active }} details are correct.
                    @elseif($active == 'top_up')
                        Please confirm your Username is correct.
                    @endif
                </div>

                <div class="d-flex mb-2 fs-5 fw-semibold">
                    <table style="width: 100%;">
                        <colgroup>
                            <col style="width: 30%;">
                            <col style="width: 2%;">
                            <col>
                        </colgroup>
                        <tbody>
                        <tr>
                            <td>
                                @if($active == 'merch')
                                    Item Name
                                @elseif($active == 'ticket')
                                    Event Name
                                @elseif($active == 'top_up')
                                    @if($itemData->category_id == 1)
                                        User ID
                                    @else
                                        Riot ID
                                    @endif
                                @endif
                            </td>
                            <td>:</td>
                            <td>
                                @if($active == 'merch')
                                    {{ $itemData->merch_name }}
                                @elseif($active == 'ticket')
                                    {{ $itemData->category_id }}
                                @elseif($active == 'top_up')
                                    @if($itemData->category_id == 1)
                                        {{ $itemData->in_game_id }}
                                    @else
                                        {{ $itemData->riot_id }}
                                    @endif
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>:</td>
                            <td>{{ 'Rp'.number_format($itemData->endtotal, 0, ",", ".") }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mb-2 fs-4 mt-3 fw-semibold">
                    Open m-banking or e-Wallet and scan the QR code to complete the payment!
                </div>

                <button type="submit" class="btn justify-content-center d-flex mt-3 mb-3 p-3 border-bottom">
                    <img src="/images/qr.png" alt="qr" class="col-4 pb-3">
                </button>

                <div class="d-flex justify-content-between stroke-putih warna-abu fs-2 pt-3 pb-1">
                    <div>
                        Total Payment:
                    </div>
                    <div>
                        {{ 'Rp'.number_format($itemData->endtotal, 0, ",", ".") }}
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('footer')
    @include('footer.footer-2')
@endsection
