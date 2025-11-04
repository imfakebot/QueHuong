import { DataTypes } from "sequelize";
import sequelize from "../config/database.config.js"; // Import instance sequelize

const Tags = sequelize.define('Tags', {
    tagID: {
        type: DataTypes.UUID,
        defaultValue: DataTypes.UUIDV4,
        primaryKey: true,
    },
    name: {
        type: DataTypes.STRING,
        allowNull: false,
        unique: true,
    },
    slug: {
        type: DataTypes.STRING,
        allowNull: false,
        unique: true,
    },
    iconClass: {
        type: DataTypes.STRING,
        allowNull: false,
    },
}, {
    tableName: 'Tags'
});

export default Tags;