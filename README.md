# Mehfilism: Wa To Do

[![Website](https://img.shields.io/badge/Website-mehfilism.github.io/todo/-blue)](https://mehfilism.github.io/todo/)

A web-based To-Do List application that supports both guest and account-based task management, built with a clean separation of frontend, backend, and database layers.

## Project Overview

This project develops a responsive web application for managing personal to-do lists. The system supports two modes of operation: guest mode for quick, temporary task management and account mode for persistent, user-specific task storage.

The architecture follows a structured approach with clear separation of concerns:
- **Frontend**: User interface and client-side interactions
- **Backend**: Server-side logic and API handling
- **Database**: Secure persistent storage

## Objectives

- Create an intuitive and responsive user interface
- Enable comprehensive task management (add, delete, update, complete tasks)
- Support guest users without requiring account creation
- Provide account-based functionality with user profiles
- Ensure secure data storage and retrieval from a server-side database

## Features

### Account Mode
- User registration and login system
- Personalized user profiles with name and additional information
- Persistent task storage in the database
- Secure user session management

### To-Do Management
- Add new tasks with descriptions
- Delete unwanted tasks
- Mark tasks as completed
- View all tasks in an organized list

### Guest Mode
- No login required for immediate use
- Temporary task storage using browser local storage
- Ideal for short-term or one-off task management

## 🏗️ System Architecture

```
Frontend (HTML, CSS, JavaScript)
        ↓
JavaScript (Fetch API)
        ↓
Backend (Node.js / Express)
        ↓
Database (MySQL)
```


## Project Structure

```
/frontend
    ├── index.html
    ├── styles.css
    ├── script.js

/backend
    ├── server.js
    ├── routes/
    ├── controllers/

/database
    ├── schema.sql
```

## 👥 Project Team

| Role | Member | Responsibilities |
|------|--------|------------------|
| **Frontend Developer** | AAKASH PATEL | Login/signup pages, home page UI |
| **Client-Side Backend** | PRABIR SOREN | Website interactivity, frontend-server connection, guest mode implementation |
| **Server-Side Backend** | ADITYA EKKA | Backend server, database integration, website hosting |
| **Database Administrator** | RAHUL MARAVI | Database setup, table creation, query writing |

## 🚀 Getting Started

Visit the live application at: [https://mehfilism.github.io/todo/](https://mehfilism.github.io/todo/)

For development setup, ensure you have the required dependencies installed and configured for your local environment.
