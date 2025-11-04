import { DataTypes } from 'sequelize';
import sequelize from '../config/database.config.js'; // Import instance sequelize

const User = sequelize.define('User', {
    id: {
        type: DataTypes.UUID,
        defaultValue: DataTypes.UUIDV4,
        primaryKey: true,
    },
    fullname: {
        type: DataTypes.STRING,
        allowNull: false,
        unique: false,
    },
    email: {
        type: DataTypes.STRING,
        allowNull: false,
        unique: true,
        validate: {
            isEmail: true,
        },
    },
    phoneNumber: {
        type: DataTypes.STRING,
        allowNull: true,
        unique: true,
    },
    address: {
        type: DataTypes.STRING,
        allowNull: true,
    }
}, {
    timestamps: true,
    tableName: 'users', // Tên bảng trong DB (tùy chọn, Sequelize sẽ tự động pluralize nếu không có)
});

export default User;