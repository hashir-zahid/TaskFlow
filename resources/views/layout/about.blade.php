@extends('layout.app')
<style>
    h1{
        color: #6c5ce7;
    }
    h2{
        color: white;
    }
</style>
@section('content')
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold">About Our Task Manager</h1>
        <div class="w-24 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mt-4 rounded-full"></div>
    </div>

    <div class="space-y-6">
        <section>
            <h2 class="text-2xl font-semibold mb-3" style="color: #b8b8c0;">Our Mission</h2>
            <p class="text-text-secondary">
                At Nexus Task Manager, we believe productivity should be simple, intuitive, and accessible to everyone. 
                Our mission is to help individuals and teams organize their work efficiently without the complexity 
                found in many productivity tools.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold mb-3" style="color: #b8b8c0;">Our Story</h2>
            <p class="text-text-secondary">
                Founded in 2023, Nexus began as a personal project to solve our own productivity challenges. 
                Frustrated with overly complex tools that got in the way more than they helped, we set out to 
                build a task manager that was both powerful and pleasant to use.
            </p>
        </section>

        <section class="bg-bg-darker p-6 rounded-lg border border-gray-800">
            <h2 class="text-2xl font-semibold mb-3 text-center" style="color: #b8b8c0;">Ready to Get Organized?</h2>
            <p class="text-text-secondary text-center mb-4">
                Join thousands of users who have transformed their productivity with Nexus Task Manager.
            </p>                            
        </section>                                                                              
    </div>
@endsection