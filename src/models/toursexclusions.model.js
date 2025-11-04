import { DataTypes } from "sequelize";
import sequelize from "../config/database.config.js"; // Import instance sequelize

const ToursExclusions = sequelize.define('TourExclusions', {
    toursExclusionsID: {
        type: DataTypes.UUID,
        defaultValue: DataTypes.UUIDV4,
        primaryKey: true,
    },
    tourID: {
        type: DataTypes.UUID,
        allowNull: false,
    },
    startDate:{
        type: DataTypes.DATE,
        allowNull: false,
    },
    availableSlot:{
        type: DataTypes.INTEGER,
        allowNull: false,
        unsigned: true,
    }
}, {
    tableName: 'ToursExclusions'
});

export default ToursExclusions;
    