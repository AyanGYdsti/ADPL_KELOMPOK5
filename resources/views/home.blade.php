@extends('layouts.jelajah')

@section('title', 'Home')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reuse & Share - Berbagi Barang Secara Komunitas</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f8f9fa;
            color: #333;
        }

        .header {
            background: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #10b981;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .user-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #10b981;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        .hero {
            background: linear-gradient(135deg, #10b981, #059669);
            padding: 3rem 2rem;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 2rem;
            align-items: center;
        }

        .hero-text h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .hero-text p {
            opacity: 0.9;
            margin-bottom: 1.5rem;
        }

        .search-container {
            position: relative;
            max-width: 400px;
            width: 100%;
        }

        .search-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
        }

        .search-btn {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            background: #10b981;
            border: none;
            padding: 0.5rem;
            border-radius: 6px;
            color: white;
            cursor: pointer;
        }

        .hero-illustration {
            display: flex;
            gap: 1rem;
        }

        .person {
            width: 60px;
            height: 80px;
            background: rgba(255,255,255,0.2);
            border-radius: 30px 30px 10px 10px;
            position: relative;
        }

        .person::before {
            content: '';
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 20px;
            background: rgba(255,255,255,0.8);
            border-radius: 50%;
        }

        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .filters {
            margin-bottom: 2rem;
        }

        .filter-title {
            font-weight: bold;
            margin-bottom: 1rem;
            color: #374151;
        }

        .category-filters {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .category-btn {
            padding: 0.5rem 1rem;
            border: 1px solid #d1d5db;
            border-radius: 20px;
            background: white;
            cursor: pointer;
            transition: all 0.2s;
            font-size: 0.9rem;
        }

        .category-btn:hover, .category-btn.active {
            background: #10b981;
            color: white;
            border-color: #10b981;
        }

        .sort-filters {
            display: flex;
            gap: 0.5rem;
        }

        .sort-btn {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: 1px solid #d1d5db;
            background: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
        }

        .sort-btn:hover, .sort-btn.active {
            background: #374151;
            color: white;
        }
