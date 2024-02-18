# Quiz Platform

## Introduction

This platform is designed to allow users to create and participate in quizzes similar to Google Forms. It provides a simple yet robust environment for creating various types of quizzes, managing them, and engaging with participants. The platform caters to two main types of users: Admins and Users, with specific functionalities tailored to each.

## User Types

### Admin
- Manages Users, Quizzes, and other resources from the Dashboard.

### Users
- Can create quizzes and/or participate in them.
- Manage their created Quizzes from the Dashboard.
- View Quizzes they participated in from their Dashboard.

## Quiz Features

### Basic Features
- **User Registration:** Any user can register to create their quiz and share it.
- **Quiz Types:**
    - **Private Quiz:** Requires participants to login to the system.
    - **Public Quiz:** Participants can join without needing to login.
- **Quiz Accessibility:** Each quiz has a start date-time and end date-time, making it accessible only within this specified range.

### Advanced Features
- **Timer:** Users can add a timer to the Quiz to set a time limit for participants.
- **Default Answer:** Allows users to add default answers for radio and checkbox questions, enabling instant results for participants upon submission.
- **Pricing Plans:**
    - **Free Plan:** Users can create up to 5 Quizzes.
    - **Premium Plan:** Users can create an unlimited number of Quizzes. Integration with a payment gateway is required for this feature.

## Quiz Question Types
- Short Text
- Long Text
- Radio
- Checkbox

## Dashboard Management
- Users can manage their created quizzes, view participated quizzes, and access advanced features from their Dashboard.
- Admins have the capability to manage Users, Quizzes, and other platform resources from the Admin Dashboard.

## Conclusion

This Quiz Platform is a comprehensive solution for creating and managing quizzes. With its user-friendly interface, it aims to provide an engaging and efficient experience for both quiz creators and participants.


## API Documentation
### Authentication
- **Register User**
    - Endpoint: `/api/auth/register`
    - Method: `POST`
    - Request Body: 
        ```json
        {
            "first_name": "John",
            "last_name": "Doe",
            "email": "john@demo.com",
            "password": "12345678",
            "password_confirmation": "12345678"
        }
        ```
    - Response: 
        ```json
        {
            "success": true,
            "message": "User registered successfully",
            "data": {
                "user": {
                        "id": "10",
                        "first_name": "John",
                        "last_name": "Doe",
                        "email": "john@demo.com",
                        "status": "active",
                        "created_at": "2024-02-18T12:00:00.000000Z",
                        "updated_at": "2024-02-18T12:00:00.000000Z"
                }
            }
        }
        ```
      
- **Login User**
    - Endpoint: `/api/auth/login`
    - Method: `POST`
    - Request Body: 
      ```json
      {
          "email": "john@demo.com",
          "password": "12345678"
      }
      ```
    - Response: 
        ```json
        {
            "success": true,
            "message": "string",
            "data": {
                "token": "11|px27v8iaiDamrLg4htfNGQamLPDMjMTp48EpqNSr",
                 "type": "Bearer"
            }
        }
        ```
- **Logout User**
    - Endpoint: `/api/auth/logout`
    - Method: `POST`
      - Request Header: 
          ```json
          {
              "Authorization": "Bearer  11|px27v8iaiDamrLg4htfNGQamLPDMjMTp48EpqNSr"
          }
        ```
        
    - Response:
        ```json
        {
            "success": true,
            "message": "User logged out successfully"
        }
        ```
      
- ** Forgot Password**
    - Endpoint: `/api/auth/forgot-password`
    - Method: `POST`
    - Request Body: 
        ```json
        {
            "email": "john@demo.com"
        }
        ```
    - Response: 
        ```json
        {
            "success": true,
            "message": "Password reset link sent to your email"
        }
        ```
    
- **Reset Password**
    - Endpoint: `/api/auth/reset-password`
    - Method: `POST`
    - Request Body: 
        ```json
        {
            "email": "john@demo.com",
            "password": "12345678",
            "password_confirmation": "12345678",
            "token": "9e043e50-d718-416e-986e-78605f55ddd8"
        }
        ```
    - Response: 
        ```json
        {
            "success": true,
            "message": "Password reset successfully"
        }
        ```
