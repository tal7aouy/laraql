# laraQL 🚀

## Overview 🌟

This project is a GraphQL API designed to manage users and tasks within an application. It leverages the power of GraphQL to provide a flexible and efficient way to interact with the application's data. The API allows for operations such as querying for users and tasks, finding specific users or tasks by various attributes, and listing all users or tasks.

## Features ✨

-   **User Management**: Query for single or multiple users by ID or email. Each user has a unique ID, a name, and a unique email address.
-   **Task Management**: Query for single or multiple tasks by ID, title, or status. Tasks are identifiable by a unique ID and can be filtered by their title or status.

## Getting Started 🏁

### Prerequisites 🛠️

-   A server environment capable of running GraphQL.
-   [Lighthouse](https://lighthouse-php.com/) - a PHP package that allows you to serve a GraphQL endpoint from your Laravel application.

### Installation ⚙️

1. **Install Lighthouse**: Follow the [official Lighthouse documentation](https://lighthouse-php.com/4.10/getting-started/installation.html) to install Lighthouse in your Laravel application.

2. **Schema Setup**: Place the [`schema.graphql`](command:_github.copilot.openRelativePath?%5B%7B%22scheme%22%3A%22file%22%2C%22authority%22%3A%22%22%2C%22path%22%3A%22%2FUsers%2Fmac%2FDesktop%2Flaraql%2Fgraphql%2Fschema.graphql%22%2C%22query%22%3A%22%22%2C%22fragment%22%3A%22%22%7D%5D "/Users/mac/Desktop/laraql/graphql/schema.graphql") file in your project's designated schema directory (default is [`graphql/`](command:_github.copilot.openRelativePath?%5B%7B%22scheme%22%3A%22file%22%2C%22authority%22%3A%22%22%2C%22path%22%3A%22%2FUsers%2Fmac%2FDesktop%2Flaraql%2Fgraphql%2F%22%2C%22query%22%3A%22%22%2C%22fragment%22%3A%22%22%7D%5D "/Users/mac/Desktop/laraql/graphql/") in your Laravel project).

3. **Configure Scalars**: The `DateTime` scalar type is used in this schema. Ensure the custom scalar is properly defined in your Lighthouse configuration.

### Generate a new application key 🔑

```bash
php artisan key:generate
```

### Running the Server 🚀

1. Start your Laravel server:
    ```bash
    php artisan serve
    ```
2. Access the GraphQL endpoint at the path configured in your Lighthouse settings (default is [`/graphql`](command:_github.copilot.openRelativePath?%5B%7B%22scheme%22%3A%22file%22%2C%22authority%22%3A%22%22%2C%22path%22%3A%22%2FUsers%2Fmac%2FDesktop%2Flaraql%2Fgraphql%22%2C%22query%22%3A%22%22%2C%22fragment%22%3A%22%22%7D%5D "/Users/mac/Desktop/laraql/graphql")).

## Example Queries 📊

### Query a Single User by ID 🧑‍💻

```graphql
{
    user(id: "1") {
        id
        name
        email
    }
}
```

### Query Tasks by Status ✅

```graphql
{
    tasks(status: "completed") {
        id
        title
    }
}
```

## Contributing 🤝

Contributions are welcome! Please feel free to submit pull requests or open issues to discuss proposed changes or enhancements.

If you need any more corrections or adjustments, let me know!
