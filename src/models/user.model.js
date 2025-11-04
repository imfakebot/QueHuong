import { DataTypes } from 'sequelize';

export default function initUserModel(sequelize) {
    const User = sequelize.define('User', {
        id: {
            type: DataTypes.UUID,
            defaultValue: DataTypes.UUIDV4,
            primaryKey: true,
        },
        fullname: {
            type: DataTypes.STRING,
            allowNull: false,
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
        tableName: 'users',
    });
    return User;
}