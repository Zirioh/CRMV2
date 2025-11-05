# CRM V2

This project is an improved Customer Relationship Management (CRM) system built using React with Next.js for the frontend and Laravel for the backend.

## Project Structure

The project is divided into two main parts: the frontend and the backend.

### Frontend

- **Framework**: Next.js
- **Language**: TypeScript
- **Components**: 
  - `Header.tsx`: Renders the top menu of the application.
  - `Sidebar.tsx`: Implements the collapsible left sidebar menu.
  - `Layout.tsx`: Wraps the `Header`, `Sidebar`, and main content area.
  - `Button.tsx`: A reusable button component.
  - `Card.tsx`: A reusable card component for displaying content.
- **Pages**:
  - `_app.tsx`: Custom App component for global styles and layout.
  - `index.tsx`: Main entry point rendering the `Layout` component.
  - `dashboard.tsx`: Dashboard view of the application.
- **Styles**: Global CSS styles are defined in `globals.css`.
- **Types**: TypeScript types and interfaces are defined in `index.ts`.

### Backend

- **Framework**: Laravel
- **Controllers**: Handle incoming requests and return responses.
- **Middleware**: Filter HTTP requests entering the application.
- **Models**: Eloquent model classes for database interaction.
- **Services**: Encapsulate business logic.
- **Routes**: 
  - `api.php`: Defines API routes.
  - `web.php`: Defines web routes.
- **Database**: Migration files for schema changes.

## Getting Started

To get started with the project, follow these steps:

1. **Clone the repository**:
   ```bash
   git clone <repository-url>
   ```

2. **Navigate to the frontend directory**:
   ```bash
   cd frontend
   ```

3. **Install dependencies**:
   ```bash
   npm install
   ```

4. **Run the frontend application**:
   ```bash
   npm run dev
   ```

5. **Navigate to the backend directory**:
   ```bash
   cd ../backend
   ```

6. **Install dependencies**:
   ```bash
   composer install
   ```

7. **Run the backend application**:
   ```bash
   php artisan serve
   ```

## License

This project is licensed under the MIT License. See the LICENSE file for details.