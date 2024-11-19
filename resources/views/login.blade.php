<html>
<head>
    <title>Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold text-center mb-6">Sign in to your account</h2>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email address
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email address">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Password">
            </div>
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center">
                    <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" id="remember_me">
                    <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900">
                        Remember me
                    </label>
                </div>
                <div>
                    <a class="inline-block align-baseline font-bold text-sm text-indigo-600 hover:text-indigo-800" href="#">
                        Forgot password?
                    </a>
                </div>
            </div>
            <div class="mb-4">
                <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Sign in
                </button>
            </div>
            <div class="flex items-center justify-center mb-4">
                <span class="text-gray-500 text-sm">Or continue with</span>
            </div>
            <div class="flex justify-center">
                <a href="/auth/google" class="w-1/2 bg-white border border-gray-300 text-gray-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mr-2 flex items-center justify-center">
                    <i class="fab fa-google mr-2"></i> Google
                </a>
            </div>

            <div class="text-center">
                <span class="text-gray-700 text-sm">Don't have an account? </span>
                <a class="text-indigo-600 hover:text-indigo-800 font-bold text-sm" href="/register">Sign up</a>
            </div>
        </form>
    </div>
</body>
</html>