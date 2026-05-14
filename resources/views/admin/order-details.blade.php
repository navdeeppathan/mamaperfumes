{{-- resources/views/admin/order-details.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order #{{ $order->id }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        body{
            font-family: 'Inter', sans-serif;
            background:#F0F4FA;
        }

        .font-display{
            font-family: 'Syne', sans-serif;
        }

    </style>

</head>
<body>

<div class="min-h-screen">

    <div class="bg-gradient-to-r from-sky-700 to-blue-900 text-white p-8 shadow-xl">

        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between gap-6">

            <div>

                <div class="text-sm uppercase tracking-[3px] text-blue-100 mb-3">
                    Mama Perfumes <br>
                    Wholesale Fragrances · Dubai
                </div>

                <h1 class="font-display text-4xl font-bold mb-3">
                    Order #{{ $order->id }}
                </h1>

                <div class="flex flex-wrap gap-3">

                    <div class="px-4 py-2 rounded-full bg-white/15 text-sm">
                        Status:
                        <strong>{{ $order->status }}</strong>
                    </div>

                    <div class="px-4 py-2 rounded-full bg-white/15 text-sm">
                        Payment:
                        <strong>{{ $order->payment_status }}</strong>
                    </div>

                </div>

            </div>

            <div class="bg-white/10 rounded-3xl p-6 min-w-[280px]">

                <div class="text-sm text-blue-100 mb-4">
                    Customer Details
                </div>

                <div class="space-y-3">

                    <div>
                        <div class="text-xs text-blue-100">
                            Name
                        </div>

                        <div class="font-semibold text-lg">
                            {{ $order->user->name ?? 'N/A' }}
                        </div>
                    </div>

                    <div>
                        <div class="text-xs text-blue-100">
                            Email
                        </div>

                        <div>
                            {{ $order->user->email ?? 'N/A' }}
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden mt-6">

                        <div class="p-4 border-b border-slate-100">

                            <h2 class="font-display text-xl font-bold text-slate-800">
                                Delivery Information
                            </h2>

                        </div>

                        <div class="p-4 space-y-3">

                            <div>

                                <div class="text-xs uppercase tracking-[2px] text-slate-400 mb-2">
                                    Delivery Date
                                </div>

                                <div class="text-sm font-semibold text-slate-800">

                                    {{ $order->delivery_date ?? 'Not Assigned' }}

                                </div>

                            </div>

                            <div>

                                <div class="text-xs uppercase tracking-[2px] text-slate-400 mb-2">
                                    Delivery Instructions
                                </div>

                                <div class="text-slate-700 text-sm leading-7">

                                    {{ $order->delivery_instructions ?? 'No instructions added' }}

                                </div>

                            </div>

                        </div>

                    </div>
                </div>


            </div>
            

        </div>

    </div>

    <div class="max-w-7xl mx-auto p-6">

        @if(session('success'))
            <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-5 py-4 rounded-2xl">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid lg:grid-cols-3 gap-6">

            <div class="lg:col-span-2">

                <div class="bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden">

                    <div class="p-6 border-b border-slate-100">

                        <h2 class="font-display text-2xl font-bold text-slate-800">
                            Order Items
                        </h2>

                    </div>

                    <div class="divide-y divide-slate-100">

                        @php
                            $subtotal = 0;
                        @endphp

                        @foreach($order->items as $item)

                            @php
                                $lineTotal = $item->price * $item->quantity;
                                $subtotal += $lineTotal;
                            @endphp

                            <div class="p-6 flex flex-col md:flex-row justify-between gap-5">

                                <div class="flex gap-4">

                                    <img
                                        src="{{ asset($item->product->image) }}"
                                        class="w-24 h-24 rounded-2xl object-cover border border-slate-200"
                                    >

                                    <div>

                                        <div class="text-xs uppercase tracking-[2px] text-sky-700 font-semibold mb-2">
                                            {{ $item->product->brand }}
                                        </div>

                                        <h3 class="font-semibold text-lg text-slate-800">
                                            {{ $item->product->title }}
                                        </h3>

                                        <div class="text-sm text-slate-500 mt-2">
                                            MOQ:
                                            {{ $item->product->moq }}
                                        </div>

                                    </div>

                                </div>

                                <div class="text-right">

                                    <div class="text-sm text-slate-500 mb-2">
                                        Quantity
                                    </div>

                                    <div class="text-xl font-bold text-slate-800 mb-4">
                                        {{ $item->quantity }}
                                    </div>

                                    <div class="text-sm text-slate-500">
                                        Price
                                    </div>

                                    <div class="font-bold text-sky-700 text-lg">
                                        £{{ number_format($lineTotal,2) }}
                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

            <div>

                <div class="bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden sticky top-5">

                    <div class="p-6 border-b border-slate-100">

                        <h2 class="font-display text-2xl font-bold text-slate-800">
                            Payment
                        </h2>

                    </div>

                    <div class="p-6">

                        @php
                            $vat = $subtotal * 0.20;
                            $grandTotal = $subtotal + $vat;
                        @endphp

                        <div class="space-y-4 mb-8">

                            <div class="flex justify-between">
                                <span class="text-slate-500">
                                    Subtotal
                                </span>

                                <span class="font-semibold">
                                    £{{ number_format($subtotal,2) }}
                                </span>
                            </div>

                            <div class="flex justify-between">
                                <span class="text-slate-500">
                                    VAT (20%)
                                </span>

                                <span class="font-semibold">
                                    £{{ number_format($vat,2) }}
                                </span>
                            </div>

                            <div class="border-t pt-4 flex justify-between text-xl">

                                <span class="font-bold">
                                    Grand Total
                                </span>

                                <span class="font-bold text-sky-700">
                                    £{{ number_format($grandTotal,2) }}
                                </span>

                            </div>

                        </div>

                        <form method="POST"
                              action="{{ url('/admin/order/confirm/'.$order->id) }}">

                            @csrf

                            <div class="mb-5">

                                <label class="block text-sm font-semibold text-slate-700 mb-3">
                                    Payment Method
                                </label>

                                <select
                                    name="method"
                                    required
                                    class="w-full h-14 rounded-2xl border-2 border-slate-200 bg-slate-50 px-4 focus:outline-none focus:border-sky-700"
                                >

                                    <option value="">
                                        Select Payment Method
                                    </option>

                                    <option value="bank_transfer">
                                        Bank Transfer
                                    </option>

                                    <option value="cash">
                                        Cash
                                    </option>

                                    <option value="card">
                                        Card
                                    </option>

                                    <option value="paypal">
                                        PayPal
                                    </option>

                                </select>

                            </div>

                            <div class="mb-5">

                                <label class="block text-sm font-semibold text-slate-700 mb-3">
                                    Delivery Date
                                </label>

                                <input
                                    type="date"
                                    name="delivery_date"
                                    required
                                    class="w-full h-14 rounded-2xl border-2 border-slate-200 bg-slate-50 px-4 focus:outline-none focus:border-sky-700"
                                >

                            </div>

                            <div class="mb-6">

                                <label class="block text-sm font-semibold text-slate-700 mb-3">
                                    Delivery Instructions
                                </label>

                                <textarea
                                    name="delivery_instructions"
                                    rows="4"
                                    placeholder="Enter delivery instructions..."
                                    class="w-full rounded-2xl border-2 border-slate-200 bg-slate-50 p-4 focus:outline-none focus:border-sky-700"
                                ></textarea>

                            </div>

                            <button
                                type="submit"
                                class="w-full h-14 rounded-2xl bg-gradient-to-r from-sky-700 to-blue-900 text-white font-bold text-lg hover:scale-[1.02] transition"
                            >
                                Confirm Order
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>