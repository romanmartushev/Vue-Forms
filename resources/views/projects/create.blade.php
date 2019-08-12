<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="/css/app.css" rel="stylesheet">
</head>

<body class="bg-gray-300 pt-10">
    <div id="app" class="container mx-auto">
        @include ('projects.list')      

        <form method="POST" action="/projects" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            <div class="control">
                <label for="name" class="block mb-2 text-2xl">Project Name:</label>
                
                <input type="text" id="name" name="name" class="border border-gray-400 rounded w-full" v-model="form.name">

                <span class="block text-red-600" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
            </div>

            <div class="control">
                <label for="description" class="block mb-2 text-2xl">Project Description:</label>
                
                <input type="text" id="description" name="description" class="border border-gray-400 rounded w-full" v-model="form.description">

                <span class="block text-red-600" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
            </div>

            <div class="mt-3">
                <button class="rounded px-3 py-1 text-white" :disabled="form.errors.any()" :class="[ form.errors.any() ? 'bg-gray-500' : 'bg-teal-400']">Create</button>
            </div>
        </form>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>