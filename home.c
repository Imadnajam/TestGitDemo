

int main() {
    int choice;

    while (1) {
        printf("Welcome to My Homepage\n");
        printf("1. About\n");
        printf("2. Portfolio\n");
        printf("3. Contact\n");
        printf("4. Exit\n");

        printf("Enter your choice: ");
        scanf("%d", &choice);

        switch (choice) {
            case 1:
                printf("About Me:\n");
                printf("I am a C programmer. This is my simple homepage.\n");
                break;
            case 2:
                printf("My Portfolio:\n");
                printf("I don't have a portfolio yet.\n");
                break;
            case 3:
                printf("Contact Me:\n");
                printf("You can reach me at myemail@example.com\n");
                break;
            case 4:
                printf("Goodbye!\n");
                exit(0);
            default:
                printf("Invalid choice. Please try again.\n");
        }
    }

    return 0;
}
