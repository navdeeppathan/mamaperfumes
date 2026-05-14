{{-- resources/views/admin/passcode.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Verification</title>

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

<div class="min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl overflow-hidden border border-slate-200">

        <div class="bg-gradient-to-r from-sky-700 to-blue-900 p-8 text-white text-center">

            <div class="w-20 h-20 mx-auto rounded-full bg-white/20 flex items-center justify-center text-4xl mb-5">
                🔒
            </div>

            <h1 class="font-display text-3xl font-bold">
                Admin Verification
            </h1>

            <p class="text-sm text-blue-100 mt-3">
                Enter 4 digit security passcode
            </p>

        </div>

        <div class="p-8">

            @if(session('error'))
                <div class="mb-5 bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded-xl text-sm">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ url('/admin/order/verify-passcode') }}">

                @csrf

                <input type="hidden"
                       name="order_id"
                       value="{{ $id }}">

                <div class="mb-6">

                    <label class="block text-sm font-semibold text-slate-700 mb-3">
                        Security Passcode
                    </label>

                    <input
                        type="password"
                        name="passcode"
                        maxlength="4"
                        required
                        placeholder="••••"
                        class="w-full h-16 rounded-2xl border-2 border-slate-200 bg-slate-50 text-center text-3xl tracking-[12px] focus:outline-none focus:border-sky-700 transition"
                    >

                </div>

                <button
                    type="submit"
                    class="w-full h-14 rounded-2xl bg-gradient-to-r from-sky-700 to-blue-900 text-white font-bold text-lg hover:scale-[1.02] transition"
                >
                    Verify Access
                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>