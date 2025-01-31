# HNG12 Public API

## Overview
This is a simple API for HNG12 that returns:
- Your registered email address.
- The current date and time in ISO 8601 format (UTC).
- A link to the project's GitHub repository.

## API Endpoint
**Base URL:**  
`https://your-deployed-url.com/`

**Request Method:**  
`GET /`

**Response Format (200 OK):**
```json
{
  "email": "ubanistephanieugonna@gmail.com",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "https://github.com/stephubani/hng12-public-ap"
}
