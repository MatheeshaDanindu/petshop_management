# petshop_management
# PAWSY - PetShop Management

PetShop Management is a comprehensive system designed for pet shops. It enables users to efficiently add, edit, delete, and monitor the pets in the inventory. The system features secure user authentication, robust reporting capabilities, and a responsive design for optimal usability across different devices.

## Prerequisites

Before setting up the PetShop Management System, ensure you have the following installed on your system:

- **XAMPP**: This package includes Apache, MySQL, PHP, and phpMyAdmin, which are essential for running the application.
- **Web Browser**: Any modern web browser like Google Chrome or Mozilla Firefox.

## Setting Up

1. **Download and Install XAMPP**
   - XAMPP can be downloaded and installed from the [official website](https://www.apachefriends.org/index.html).
   - Verify that Apache and MySQL are active in the XAMPP control panel.

2. **Cloning the Repository**
   - Clone the repository using the following command:

     ```bash
     git clone https://github.com/MatheeshaDanindu/petshop_management.git
     ```

   - Copy the cloned repository to the `htdocs` directory within the XAMPP installation folder:

     ```bash
     cp -r petshop_management /path-to-xampp/htdocs/
     ```

3. **Configure the Database**
   - Access phpMyAdmin via [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
   - Create a database named `petshop_management`.
   - Import the SQL file (`petshop_management_db.sql`) to set up the necessary tables.

4. **Update Configuration**
   - Modify the `config.php` file with your MySQL credentials to connect to the database.

5. **Start the Application**
   - Ensure the project folder is located in the `htdocs` directory in XAMPP.
   - Access the application through [http://localhost/petshop_management](http://localhost/petshop_management).

## Usage Instructions

### Accessing the Application

After successfully setting up the application, access the system through your browser at [http://localhost/petshop_management/](http://localhost/petshop_management/).

### Key Functionalities

- **Dashboard**: Provides a comprehensive overview of the pet shop’s inventory, allowing users to quickly assess stock levels and access other management features.
- **Inventory Management**: Add, edit, or delete inventory items using straightforward forms accessible from the dashboard.
- **User Management**: Register new users and manage existing user accounts, with role-based permissions ensuring secure access.
- **Report Generation**: Generate and export detailed reports on inventory and other metrics for further analysis or record-keeping.


## Authors

- **Matheesha Herath** - [MatheeshaDanindu](https://github.com/MatheeshaDanindu)
- **Shalika Ramanayake** - [Shali29](https://github.com/Shali29)
- **Shehara Rajakaruna** - [SheharaR](https://github.com/SheharaR)
- **Sanduni Walahewa** - [wellitzokays211](https://github.com/wellitzokays211)
- **Tharindu Ananda** - [Tharindu49](https://github.com/Tharindu49)
- **Binaru Ranasinghe** - [binarur](https://github.com/binarur)
- **Uchintha Bandara** - [Uchintha1234](https://github.com/Uchintha1234)
- **Navindu Rasanjana** - [navindur](https://github.com/navindur)

## Contributing

We welcome contributions to PetShop Management! If you have suggestions or improvements, please fork the repository and submit a pull request. For significant changes, consider opening an issue to discuss your ideas with the maintainers.

## License

PetShop Management is licensed under the MIT License. See the `LICENSE` file for more details.

## Contact

For any questions or support, please contact us! 

- **GitHub Issues**: [Submit an issue](https://github.com/MatheeshaDanindu/petshop_management/issues)

Thank you for using PetShop Management!

